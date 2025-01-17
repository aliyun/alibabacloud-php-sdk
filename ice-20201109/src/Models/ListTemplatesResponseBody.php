<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTemplatesResponseBody\templates;

class ListTemplatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var templates[]
     */
    public $templates;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'templates'  => 'Templates',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->templates)) {
            Model::validateArray($this->templates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->templates) {
            if (\is_array($this->templates)) {
                $res['Templates'] = [];
                $n1               = 0;
                foreach ($this->templates as $item1) {
                    $res['Templates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Templates'])) {
            if (!empty($map['Templates'])) {
                $model->templates = [];
                $n1               = 0;
                foreach ($map['Templates'] as $item1) {
                    $model->templates[$n1++] = templates::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
