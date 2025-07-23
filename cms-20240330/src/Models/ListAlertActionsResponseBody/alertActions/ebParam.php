<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions;

use AlibabaCloud\Tea\Model;

class ebParam extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $ebSource;

    /**
     * @example test
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;

    /**
     * @example test
     *
     * @var string
     */
    public $subject;
    protected $_name = [
        'ebSource' => 'ebSource',
        'eventBusName' => 'eventBusName',
        'regionId' => 'regionId',
        'subject' => 'subject',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ebSource) {
            $res['ebSource'] = $this->ebSource;
        }
        if (null !== $this->eventBusName) {
            $res['eventBusName'] = $this->eventBusName;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ebParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ebSource'])) {
            $model->ebSource = $map['ebSource'];
        }
        if (isset($map['eventBusName'])) {
            $model->eventBusName = $map['eventBusName'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        return $model;
    }
}
