<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListGraphSchemasResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $activeVersion;

    /**
     * @var string
     */
    public $businessProfile;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $graphName;

    /**
     * @var string
     */
    public $graphStatus;

    /**
     * @var bool
     */
    public $hasDraft;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var int
     */
    public $objectTypeCount;

    /**
     * @var int
     */
    public $relationCount;

    /**
     * @var string[]
     */
    public $semanticTags;
    protected $_name = [
        'activeVersion' => 'activeVersion',
        'businessProfile' => 'businessProfile',
        'displayName' => 'displayName',
        'graphName' => 'graphName',
        'graphStatus' => 'graphStatus',
        'hasDraft' => 'hasDraft',
        'isDefault' => 'isDefault',
        'objectTypeCount' => 'objectTypeCount',
        'relationCount' => 'relationCount',
        'semanticTags' => 'semanticTags',
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
        if (null !== $this->activeVersion) {
            $res['activeVersion'] = $this->activeVersion;
        }

        if (null !== $this->businessProfile) {
            $res['businessProfile'] = $this->businessProfile;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->graphStatus) {
            $res['graphStatus'] = $this->graphStatus;
        }

        if (null !== $this->hasDraft) {
            $res['hasDraft'] = $this->hasDraft;
        }

        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
        }

        if (null !== $this->objectTypeCount) {
            $res['objectTypeCount'] = $this->objectTypeCount;
        }

        if (null !== $this->relationCount) {
            $res['relationCount'] = $this->relationCount;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['activeVersion'])) {
            $model->activeVersion = $map['activeVersion'];
        }

        if (isset($map['businessProfile'])) {
            $model->businessProfile = $map['businessProfile'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['graphStatus'])) {
            $model->graphStatus = $map['graphStatus'];
        }

        if (isset($map['hasDraft'])) {
            $model->hasDraft = $map['hasDraft'];
        }

        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
        }

        if (isset($map['objectTypeCount'])) {
            $model->objectTypeCount = $map['objectTypeCount'];
        }

        if (isset($map['relationCount'])) {
            $model->relationCount = $map['relationCount'];
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

        return $model;
    }
}
