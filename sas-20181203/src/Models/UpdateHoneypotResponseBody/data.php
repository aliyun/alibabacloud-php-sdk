<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\UpdateHoneypotResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 9bf8cd373112263d4bc102fc5dba9d9f812ee05d4d35c487d330d52e937f****
     *
     * @var string
     */
    public $honeypotId;

    /**
     * @example Webmin
     *
     * @var string
     */
    public $honeypotImageDisplayName;

    /**
     * @example webpage
     *
     * @var string
     */
    public $honeypotImageName;

    /**
     * @example hyl-phpmyadmin
     *
     * @var string
     */
    public $honeypotName;

    /**
     * @example a882e590-b87b-45a6-87b9-d0a3e5a0****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 868a7579-00b5-4a74-999d-8bd3f411e8a3
     *
     * @var string
     */
    public $presetId;

    /**
     * @var string[]
     */
    public $state;
    protected $_name = [
        'honeypotId'               => 'HoneypotId',
        'honeypotImageDisplayName' => 'HoneypotImageDisplayName',
        'honeypotImageName'        => 'HoneypotImageName',
        'honeypotName'             => 'HoneypotName',
        'nodeId'                   => 'NodeId',
        'presetId'                 => 'PresetId',
        'state'                    => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honeypotId) {
            $res['HoneypotId'] = $this->honeypotId;
        }
        if (null !== $this->honeypotImageDisplayName) {
            $res['HoneypotImageDisplayName'] = $this->honeypotImageDisplayName;
        }
        if (null !== $this->honeypotImageName) {
            $res['HoneypotImageName'] = $this->honeypotImageName;
        }
        if (null !== $this->honeypotName) {
            $res['HoneypotName'] = $this->honeypotName;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->presetId) {
            $res['PresetId'] = $this->presetId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
        }
        if (isset($map['HoneypotImageDisplayName'])) {
            $model->honeypotImageDisplayName = $map['HoneypotImageDisplayName'];
        }
        if (isset($map['HoneypotImageName'])) {
            $model->honeypotImageName = $map['HoneypotImageName'];
        }
        if (isset($map['HoneypotName'])) {
            $model->honeypotName = $map['HoneypotName'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PresetId'])) {
            $model->presetId = $map['PresetId'];
        }
        if (isset($map['State'])) {
            if (!empty($map['State'])) {
                $model->state = $map['State'];
            }
        }

        return $model;
    }
}
