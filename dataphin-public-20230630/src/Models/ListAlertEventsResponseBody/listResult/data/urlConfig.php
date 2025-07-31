<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsResponseBody\listResult\data;

use AlibabaCloud\Tea\Model;

class urlConfig extends Model
{
    /**
     * @example https://dataphin.com/ops/test3
     *
     * @var string
     */
    public $alertConfigUrl;

    /**
     * @example https://dataphin.com/ops/test2
     *
     * @var string
     */
    public $logUrl;

    /**
     * @example https://dataphin.com/ops/test1
     *
     * @var string
     */
    public $objectUrl;
    protected $_name = [
        'alertConfigUrl' => 'AlertConfigUrl',
        'logUrl' => 'LogUrl',
        'objectUrl' => 'ObjectUrl',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return urlConfig
     */
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
