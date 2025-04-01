<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class MetricsCollectConfig extends Model
{
    /**
     * @var bool
     */
    public $enablePushToUserSLS;

    /**
     * @var string
     */
    public $logstoreName;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'enablePushToUserSLS' => 'EnablePushToUserSLS',
        'logstoreName' => 'LogstoreName',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enablePushToUserSLS) {
            $res['EnablePushToUserSLS'] = $this->enablePushToUserSLS;
        }

        if (null !== $this->logstoreName) {
            $res['LogstoreName'] = $this->logstoreName;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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
        if (isset($map['EnablePushToUserSLS'])) {
            $model->enablePushToUserSLS = $map['EnablePushToUserSLS'];
        }

        if (isset($map['LogstoreName'])) {
            $model->logstoreName = $map['LogstoreName'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
