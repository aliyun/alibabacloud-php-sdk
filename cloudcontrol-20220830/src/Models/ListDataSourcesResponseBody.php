<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListDataSourcesResponseBody\dataSources;

class ListDataSourcesResponseBody extends Model
{
    /**
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataSources' => 'dataSources',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->dataSources)) {
            Model::validateArray($this->dataSources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSources) {
            if (\is_array($this->dataSources)) {
                $res['dataSources'] = [];
                $n1 = 0;
                foreach ($this->dataSources as $item1) {
                    $res['dataSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['dataSources'])) {
            if (!empty($map['dataSources'])) {
                $model->dataSources = [];
                $n1 = 0;
                foreach ($map['dataSources'] as $item1) {
                    $model->dataSources[$n1] = dataSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
