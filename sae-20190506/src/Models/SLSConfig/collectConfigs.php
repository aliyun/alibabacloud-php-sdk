<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\SLSConfig;

use AlibabaCloud\Tea\Model;

class collectConfigs extends Model
{
    /**
     * @var string
     */
    public $logPath;

    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $logstoreName;

    /**
     * @var string
     */
    public $logtailName;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'logPath'      => 'logPath',
        'logType'      => 'logType',
        'logstoreName' => 'logstoreName',
        'logtailName'  => 'logtailName',
        'projectName'  => 'projectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logPath) {
            $res['logPath'] = $this->logPath;
        }
        if (null !== $this->logType) {
            $res['logType'] = $this->logType;
        }
        if (null !== $this->logstoreName) {
            $res['logstoreName'] = $this->logstoreName;
        }
        if (null !== $this->logtailName) {
            $res['logtailName'] = $this->logtailName;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return collectConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logPath'])) {
            $model->logPath = $map['logPath'];
        }
        if (isset($map['logType'])) {
            $model->logType = $map['logType'];
        }
        if (isset($map['logstoreName'])) {
            $model->logstoreName = $map['logstoreName'];
        }
        if (isset($map['logtailName'])) {
            $model->logtailName = $map['logtailName'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        return $model;
    }
}
