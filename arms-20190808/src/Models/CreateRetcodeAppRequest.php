<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppRequest\tags;

class CreateRetcodeAppRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $retcodeAppName;
    /**
     * @var string
     */
    public $retcodeAppType;
    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'retcodeAppName'  => 'RetcodeAppName',
        'retcodeAppType'  => 'RetcodeAppType',
        'tags'            => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->retcodeAppName) {
            $res['RetcodeAppName'] = $this->retcodeAppName;
        }

        if (null !== $this->retcodeAppType) {
            $res['RetcodeAppType'] = $this->retcodeAppType;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RetcodeAppName'])) {
            $model->retcodeAppName = $map['RetcodeAppName'];
        }

        if (isset($map['RetcodeAppType'])) {
            $model->retcodeAppType = $map['RetcodeAppType'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
