<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCustomizedListHeadersRequest\headers;

class ModifyCustomizedListHeadersRequest extends Model
{
    /**
     * @var headers[]
     */
    public $headers;

    /**
     * @var string
     */
    public $listType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'headers' => 'Headers',
        'listType' => 'ListType',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['Headers'] = [];
                $n1 = 0;
                foreach ($this->headers as $item1) {
                    $res['Headers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->listType) {
            $res['ListType'] = $this->listType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                $n1 = 0;
                foreach ($map['Headers'] as $item1) {
                    $model->headers[$n1++] = headers::fromMap($item1);
                }
            }
        }

        if (isset($map['ListType'])) {
            $model->listType = $map['ListType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
