<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SubmitSparkJobRequest\ossInfo;
use AlibabaCloud\Tea\Model;

class SubmitSparkJobRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string[]
     */
    public $arguments;

    /**
     * @var mixed[]
     */
    public $configuration;

    /**
     * @var string[]
     */
    public $files;

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
     * @var ossInfo
     */
    public $ossInfo;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'appCode'       => 'AppCode',
        'arguments'     => 'Arguments',
        'configuration' => 'Configuration',
        'files'         => 'Files',
        'mainClass'     => 'MainClass',
        'mainFile'      => 'MainFile',
        'name'          => 'Name',
        'ossInfo'       => 'OssInfo',
        'tid'           => 'Tid',
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
        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->files) {
            $res['Files'] = $this->files;
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
        if (null !== $this->ossInfo) {
            $res['OssInfo'] = null !== $this->ossInfo ? $this->ossInfo->toMap() : null;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSparkJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['Arguments'])) {
            if (!empty($map['Arguments'])) {
                $model->arguments = $map['Arguments'];
            }
        }
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = $map['Files'];
            }
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
            $model->ossInfo = ossInfo::fromMap($map['OssInfo']);
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
