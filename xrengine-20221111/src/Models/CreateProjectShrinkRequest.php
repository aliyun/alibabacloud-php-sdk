<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models;

use AlibabaCloud\Dara\Model;

class CreateProjectShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $autoBuild;

    /**
     * @var string
     */
    public $dependencies;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var float
     */
    public $height;

    /**
     * @var string
     */
    public $intro;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var string
     */
    public $mapUuid;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $tryOnParamsShrink;

    /**
     * @var string
     */
    public $type;

    /**
     * @var float
     */
    public $weight;
    protected $_name = [
        'autoBuild' => 'AutoBuild',
        'dependencies' => 'Dependencies',
        'extInfo' => 'ExtInfo',
        'gender' => 'Gender',
        'height' => 'Height',
        'intro' => 'Intro',
        'jwtToken' => 'JwtToken',
        'mapUuid' => 'MapUuid',
        'method' => 'Method',
        'mode' => 'Mode',
        'title' => 'Title',
        'tryOnParamsShrink' => 'TryOnParams',
        'type' => 'Type',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoBuild) {
            $res['AutoBuild'] = $this->autoBuild;
        }

        if (null !== $this->dependencies) {
            $res['Dependencies'] = $this->dependencies;
        }

        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }

        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->intro) {
            $res['Intro'] = $this->intro;
        }

        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }

        if (null !== $this->mapUuid) {
            $res['MapUuid'] = $this->mapUuid;
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->tryOnParamsShrink) {
            $res['TryOnParams'] = $this->tryOnParamsShrink;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['AutoBuild'])) {
            $model->autoBuild = $map['AutoBuild'];
        }

        if (isset($map['Dependencies'])) {
            $model->dependencies = $map['Dependencies'];
        }

        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }

        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['Intro'])) {
            $model->intro = $map['Intro'];
        }

        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }

        if (isset($map['MapUuid'])) {
            $model->mapUuid = $map['MapUuid'];
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['TryOnParams'])) {
            $model->tryOnParamsShrink = $map['TryOnParams'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
