<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultResponseBody\trackResult;

use AlibabaCloud\Tea\Model;

class eventList extends Model
{
    /**
     * @var string[]
     */
    public $dataAfter;

    /**
     * @var string[]
     */
    public $dataBefore;

    /**
     * @example 1
     *
     * @var int
     */
    public $eventId;

    /**
     * @example 4324
     *
     * @var int
     */
    public $eventLength;

    /**
     * @example 2023-04-23 10:25:47
     *
     * @var string
     */
    public $eventTimestamp;

    /**
     * @example UPDATE_ROWS
     *
     * @var string
     */
    public $eventType;

    /**
     * @example -- Timestamp:2023-04-23 10:25:47 #1\r\nUPDATE `dc_test`.`tb_chunk_dml` SET `id`=1 , `gmt_create`=\"2021-09-30T00:00:00\" , `content`=\"2023-03-30 14:51:50\" , `c1`=\"2023-04-17 13:42:03\" , `c_id`=1 , `c13425`=\"b\\\"\" , `c432532535`= null , `c1432`= null , `c143243253`= null , `c1432535`= null , `c43125325`= null , `c3425325`= null WHERE  (`id`=1)"
     *
     * @var string
     */
    public $rollSQL;
    protected $_name = [
        'dataAfter'      => 'DataAfter',
        'dataBefore'     => 'DataBefore',
        'eventId'        => 'EventId',
        'eventLength'    => 'EventLength',
        'eventTimestamp' => 'EventTimestamp',
        'eventType'      => 'EventType',
        'rollSQL'        => 'RollSQL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataAfter) {
            $res['DataAfter'] = $this->dataAfter;
        }
        if (null !== $this->dataBefore) {
            $res['DataBefore'] = $this->dataBefore;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventLength) {
            $res['EventLength'] = $this->eventLength;
        }
        if (null !== $this->eventTimestamp) {
            $res['EventTimestamp'] = $this->eventTimestamp;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->rollSQL) {
            $res['RollSQL'] = $this->rollSQL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataAfter'])) {
            if (!empty($map['DataAfter'])) {
                $model->dataAfter = $map['DataAfter'];
            }
        }
        if (isset($map['DataBefore'])) {
            if (!empty($map['DataBefore'])) {
                $model->dataBefore = $map['DataBefore'];
            }
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventLength'])) {
            $model->eventLength = $map['EventLength'];
        }
        if (isset($map['EventTimestamp'])) {
            $model->eventTimestamp = $map['EventTimestamp'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['RollSQL'])) {
            $model->rollSQL = $map['RollSQL'];
        }

        return $model;
    }
}
