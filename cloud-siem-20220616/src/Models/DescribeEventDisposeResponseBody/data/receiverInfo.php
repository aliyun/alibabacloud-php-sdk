<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEventDisposeResponseBody\data;

use AlibabaCloud\Tea\Model;

class receiverInfo extends Model
{
    /**
     * @description The channel of the contact information. Valid values:
     *
     *   message
     *   mail
     *
     * @example message
     *
     * @var string
     */
    public $channel;

    /**
     * @description The creation time.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The modification time.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the recipient who receives the event handling result.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The UUID of the event.
     *
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @description The message title.
     *
     * @example siem event dealed message
     *
     * @var string
     */
    public $messageTitle;

    /**
     * @description The contact information of the recipient.
     *
     * @example 138xxxxxx
     *
     * @var string
     */
    public $receiver;

    /**
     * @description Indicates whether the message is sent. Valid values:
     *
     *   0: not sent
     *   1: sent
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'channel'      => 'Channel',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'id'           => 'Id',
        'incidentUuid' => 'IncidentUuid',
        'messageTitle' => 'MessageTitle',
        'receiver'     => 'Receiver',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }
        if (null !== $this->messageTitle) {
            $res['MessageTitle'] = $this->messageTitle;
        }
        if (null !== $this->receiver) {
            $res['Receiver'] = $this->receiver;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return receiverInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }
        if (isset($map['MessageTitle'])) {
            $model->messageTitle = $map['MessageTitle'];
        }
        if (isset($map['Receiver'])) {
            $model->receiver = $map['Receiver'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
