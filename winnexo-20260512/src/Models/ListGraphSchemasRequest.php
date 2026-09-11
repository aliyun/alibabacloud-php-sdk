<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListGraphSchemasRequest extends Model
{
    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string[]
     */
    public $semanticTags;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'keyword' => 'keyword',
        'semanticTags' => 'semanticTags',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->semanticTags)) {
            Model::validateArray($this->semanticTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->semanticTags) {
            if (\is_array($this->semanticTags)) {
                $res['semanticTags'] = [];
                $n1 = 0;
                foreach ($this->semanticTags as $item1) {
                    $res['semanticTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['semanticTags'])) {
            if (!empty($map['semanticTags'])) {
                $model->semanticTags = [];
                $n1 = 0;
                foreach ($map['semanticTags'] as $item1) {
                    $model->semanticTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
