<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertContentWithOptionsRequest\tenantContext;

class InsertContentWithOptionsRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $content;

    /**
     * @var string
     */
    public $documentId;

    /**
     * @var int
     */
    public $index;

    /**
     * @var int[]
     */
    public $path;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'content' => 'Content',
        'documentId' => 'DocumentId',
        'index' => 'Index',
        'path' => 'Path',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        if (\is_array($this->path)) {
            Model::validateArray($this->path);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['Content'] = [];
                foreach ($this->content as $key1 => $value1) {
                    $res['Content'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->path) {
            if (\is_array($this->path)) {
                $res['Path'] = [];
                $n1 = 0;
                foreach ($this->path as $item1) {
                    $res['Path'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                foreach ($map['Content'] as $key1 => $value1) {
                    $model->content[$key1] = $value1;
                }
            }
        }

        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Path'])) {
            if (!empty($map['Path'])) {
                $model->path = [];
                $n1 = 0;
                foreach ($map['Path'] as $item1) {
                    $model->path[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
