<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class Artifact extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $catagoryBizId;

    /**
     * @var int
     */
    public $creator;

    /**
     * @var Credential
     */
    public $credential;

    /**
     * @var string[]
     */
    public $fullPath;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifierName;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'bizId' => 'bizId',
        'catagoryBizId' => 'catagoryBizId',
        'creator' => 'creator',
        'credential' => 'credential',
        'fullPath' => 'fullPath',
        'gmtCreated' => 'gmtCreated',
        'gmtModified' => 'gmtModified',
        'location' => 'location',
        'modifier' => 'modifier',
        'modifierName' => 'modifierName',
        'name' => 'name',
    ];

    public function validate()
    {
        if (null !== $this->credential) {
            $this->credential->validate();
        }
        if (\is_array($this->fullPath)) {
            Model::validateArray($this->fullPath);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['bizId'] = $this->bizId;
        }

        if (null !== $this->catagoryBizId) {
            $res['catagoryBizId'] = $this->catagoryBizId;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->credential) {
            $res['credential'] = null !== $this->credential ? $this->credential->toArray($noStream) : $this->credential;
        }

        if (null !== $this->fullPath) {
            if (\is_array($this->fullPath)) {
                $res['fullPath'] = [];
                $n1 = 0;
                foreach ($this->fullPath as $item1) {
                    $res['fullPath'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->gmtCreated) {
            $res['gmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->location) {
            $res['location'] = $this->location;
        }

        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }

        if (null !== $this->modifierName) {
            $res['modifierName'] = $this->modifierName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['bizId'])) {
            $model->bizId = $map['bizId'];
        }

        if (isset($map['catagoryBizId'])) {
            $model->catagoryBizId = $map['catagoryBizId'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['credential'])) {
            $model->credential = Credential::fromMap($map['credential']);
        }

        if (isset($map['fullPath'])) {
            if (!empty($map['fullPath'])) {
                $model->fullPath = [];
                $n1 = 0;
                foreach ($map['fullPath'] as $item1) {
                    $model->fullPath[$n1++] = $item1;
                }
            }
        }

        if (isset($map['gmtCreated'])) {
            $model->gmtCreated = $map['gmtCreated'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['location'])) {
            $model->location = $map['location'];
        }

        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }

        if (isset($map['modifierName'])) {
            $model->modifierName = $map['modifierName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
