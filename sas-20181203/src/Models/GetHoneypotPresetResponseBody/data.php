<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotPresetResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotPresetResponseBody\data\fileInfoList;

class data extends Model
{
    /**
     * @var string
     */
    public $controlNodeName;

    /**
     * @var fileInfoList[]
     */
    public $fileInfoList;

    /**
     * @var string
     */
    public $honeypotImageDisplayName;

    /**
     * @var string
     */
    public $honeypotImageName;

    /**
     * @var string
     */
    public $honeypotPresetId;

    /**
     * @var string
     */
    public $meta;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $presetName;

    /**
     * @var string
     */
    public $presetType;
    protected $_name = [
        'controlNodeName' => 'ControlNodeName',
        'fileInfoList' => 'FileInfoList',
        'honeypotImageDisplayName' => 'HoneypotImageDisplayName',
        'honeypotImageName' => 'HoneypotImageName',
        'honeypotPresetId' => 'HoneypotPresetId',
        'meta' => 'Meta',
        'nodeId' => 'NodeId',
        'presetName' => 'PresetName',
        'presetType' => 'PresetType',
    ];

    public function validate()
    {
        if (\is_array($this->fileInfoList)) {
            Model::validateArray($this->fileInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controlNodeName) {
            $res['ControlNodeName'] = $this->controlNodeName;
        }

        if (null !== $this->fileInfoList) {
            if (\is_array($this->fileInfoList)) {
                $res['FileInfoList'] = [];
                $n1 = 0;
                foreach ($this->fileInfoList as $item1) {
                    $res['FileInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->honeypotImageDisplayName) {
            $res['HoneypotImageDisplayName'] = $this->honeypotImageDisplayName;
        }

        if (null !== $this->honeypotImageName) {
            $res['HoneypotImageName'] = $this->honeypotImageName;
        }

        if (null !== $this->honeypotPresetId) {
            $res['HoneypotPresetId'] = $this->honeypotPresetId;
        }

        if (null !== $this->meta) {
            $res['Meta'] = $this->meta;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->presetName) {
            $res['PresetName'] = $this->presetName;
        }

        if (null !== $this->presetType) {
            $res['PresetType'] = $this->presetType;
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
        if (isset($map['ControlNodeName'])) {
            $model->controlNodeName = $map['ControlNodeName'];
        }

        if (isset($map['FileInfoList'])) {
            if (!empty($map['FileInfoList'])) {
                $model->fileInfoList = [];
                $n1 = 0;
                foreach ($map['FileInfoList'] as $item1) {
                    $model->fileInfoList[$n1] = fileInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HoneypotImageDisplayName'])) {
            $model->honeypotImageDisplayName = $map['HoneypotImageDisplayName'];
        }

        if (isset($map['HoneypotImageName'])) {
            $model->honeypotImageName = $map['HoneypotImageName'];
        }

        if (isset($map['HoneypotPresetId'])) {
            $model->honeypotPresetId = $map['HoneypotPresetId'];
        }

        if (isset($map['Meta'])) {
            $model->meta = $map['Meta'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['PresetName'])) {
            $model->presetName = $map['PresetName'];
        }

        if (isset($map['PresetType'])) {
            $model->presetType = $map['PresetType'];
        }

        return $model;
    }
}
