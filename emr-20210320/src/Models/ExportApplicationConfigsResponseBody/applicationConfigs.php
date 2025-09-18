<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ExportApplicationConfigsResponseBody;

use AlibabaCloud\Dara\Model;

class applicationConfigs extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $configFileName;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'configFileName' => 'ConfigFileName',
        'content' => 'Content',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->configFileName) {
            $res['ConfigFileName'] = $this->configFileName;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['ConfigFileName'])) {
            $model->configFileName = $map['ConfigFileName'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
