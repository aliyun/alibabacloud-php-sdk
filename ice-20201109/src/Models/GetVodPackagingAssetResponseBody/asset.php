<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingAssetResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingAssetResponseBody\asset\egressEndpoints;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingAssetResponseBody\asset\input;

class asset extends Model
{
    /**
     * @var string
     */
    public $assetName;
    /**
     * @var string
     */
    public $contentId;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var egressEndpoints[]
     */
    public $egressEndpoints;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var input
     */
    public $input;
    protected $_name = [
        'assetName'       => 'AssetName',
        'contentId'       => 'ContentId',
        'createTime'      => 'CreateTime',
        'egressEndpoints' => 'EgressEndpoints',
        'groupName'       => 'GroupName',
        'input'           => 'Input',
    ];

    public function validate()
    {
        if (\is_array($this->egressEndpoints)) {
            Model::validateArray($this->egressEndpoints);
        }
        if (null !== $this->input) {
            $this->input->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }

        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->egressEndpoints) {
            if (\is_array($this->egressEndpoints)) {
                $res['EgressEndpoints'] = [];
                $n1                     = 0;
                foreach ($this->egressEndpoints as $item1) {
                    $res['EgressEndpoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
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
        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }

        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EgressEndpoints'])) {
            if (!empty($map['EgressEndpoints'])) {
                $model->egressEndpoints = [];
                $n1                     = 0;
                foreach ($map['EgressEndpoints'] as $item1) {
                    $model->egressEndpoints[$n1++] = egressEndpoints::fromMap($item1);
                }
            }
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        return $model;
    }
}
