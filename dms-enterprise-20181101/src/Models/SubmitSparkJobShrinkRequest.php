<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SubmitSparkJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $argumentsShrink;

    /**
     * @var string
     */
    public $configurationShrink;

    /**
     * @var string
     */
    public $filesShrink;

    /**
     * @var string
     */
    public $mainClass;

    /**
     * @var string
     */
    public $mainFile;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossInfoShrink;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'appCode'             => 'AppCode',
        'argumentsShrink'     => 'Arguments',
        'configurationShrink' => 'Configuration',
        'filesShrink'         => 'Files',
        'mainClass'           => 'MainClass',
        'mainFile'            => 'MainFile',
        'name'                => 'Name',
        'ossInfoShrink'       => 'OssInfo',
        'tid'                 => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->argumentsShrink) {
            $res['Arguments'] = $this->argumentsShrink;
        }
        if (null !== $this->configurationShrink) {
            $res['Configuration'] = $this->configurationShrink;
        }
        if (null !== $this->filesShrink) {
            $res['Files'] = $this->filesShrink;
        }
        if (null !== $this->mainClass) {
            $res['MainClass'] = $this->mainClass;
        }
        if (null !== $this->mainFile) {
            $res['MainFile'] = $this->mainFile;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossInfoShrink) {
            $res['OssInfo'] = $this->ossInfoShrink;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSparkJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['Arguments'])) {
            $model->argumentsShrink = $map['Arguments'];
        }
        if (isset($map['Configuration'])) {
            $model->configurationShrink = $map['Configuration'];
        }
        if (isset($map['Files'])) {
            $model->filesShrink = $map['Files'];
        }
        if (isset($map['MainClass'])) {
            $model->mainClass = $map['MainClass'];
        }
        if (isset($map['MainFile'])) {
            $model->mainFile = $map['MainFile'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssInfo'])) {
            $model->ossInfoShrink = $map['OssInfo'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
