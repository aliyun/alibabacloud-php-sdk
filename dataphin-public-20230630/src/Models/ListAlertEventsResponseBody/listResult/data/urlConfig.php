<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsResponseBody\listResult\data;

use AlibabaCloud\Dara\Model;

class urlConfig extends Model
{
    /**
     * @var string
     */
    public $alertConfigUrl;

    /**
     * @var string
     */
    public $logUrl;

    /**
     * @var string
     */
    public $objectUrl;
    protected $_name = [
        'alertConfigUrl' => 'AlertConfigUrl',
        'logUrl' => 'LogUrl',
        'objectUrl' => 'ObjectUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertConfigUrl) {
            $res['AlertConfigUrl'] = $this->alertConfigUrl;
        }

        if (null !== $this->logUrl) {
            $res['LogUrl'] = $this->logUrl;
        }

        if (null !== $this->objectUrl) {
            $res['ObjectUrl'] = $this->objectUrl;
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
        if (isset($map['AlertConfigUrl'])) {
            $model->alertConfigUrl = $map['AlertConfigUrl'];
        }

        if (isset($map['LogUrl'])) {
            $model->logUrl = $map['LogUrl'];
        }

        if (isset($map['ObjectUrl'])) {
            $model->objectUrl = $map['ObjectUrl'];
        }

        return $model;
    }
}
