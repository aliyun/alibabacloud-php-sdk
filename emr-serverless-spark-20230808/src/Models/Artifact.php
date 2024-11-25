<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class Artifact extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $catagoryBizId;

    /**
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $location;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $modifier;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'bizId'         => 'bizId',
        'catagoryBizId' => 'catagoryBizId',
        'creator'       => 'creator',
        'credential'    => 'credential',
        'fullPath'      => 'fullPath',
        'gmtCreated'    => 'gmtCreated',
        'gmtModified'   => 'gmtModified',
        'location'      => 'location',
        'modifier'      => 'modifier',
        'name'          => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['credential'] = null !== $this->credential ? $this->credential->toMap() : null;
        }
        if (null !== $this->fullPath) {
            $res['fullPath'] = $this->fullPath;
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Artifact
     */
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
                $model->fullPath = $map['fullPath'];
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
