<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models;

use AlibabaCloud\Dara\Model;

class ExecuteComponentRequest extends Model
{
    /**
     * @var string
     */
    public $componentActionName;

    /**
     * @var string
     */
    public $componentAssetUuid;

    /**
     * @var string
     */
    public $componentInput;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $playBookNodeName;

    /**
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'componentActionName' => 'ComponentActionName',
        'componentAssetUuid' => 'ComponentAssetUuid',
        'componentInput' => 'ComponentInput',
        'componentName' => 'ComponentName',
        'lang' => 'Lang',
        'playBookNodeName' => 'PlayBookNodeName',
        'playbookUuid' => 'PlaybookUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentActionName) {
            $res['ComponentActionName'] = $this->componentActionName;
        }

        if (null !== $this->componentAssetUuid) {
            $res['ComponentAssetUuid'] = $this->componentAssetUuid;
        }

        if (null !== $this->componentInput) {
            $res['ComponentInput'] = $this->componentInput;
        }

        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->playBookNodeName) {
            $res['PlayBookNodeName'] = $this->playBookNodeName;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
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
        if (isset($map['ComponentActionName'])) {
            $model->componentActionName = $map['ComponentActionName'];
        }

        if (isset($map['ComponentAssetUuid'])) {
            $model->componentAssetUuid = $map['ComponentAssetUuid'];
        }

        if (isset($map['ComponentInput'])) {
            $model->componentInput = $map['ComponentInput'];
        }

        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PlayBookNodeName'])) {
            $model->playBookNodeName = $map['PlayBookNodeName'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        return $model;
    }
}
