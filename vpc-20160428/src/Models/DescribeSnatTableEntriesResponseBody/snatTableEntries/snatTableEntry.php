<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSnatTableEntriesResponseBody\snatTableEntries;

use AlibabaCloud\Tea\Model;

class snatTableEntry extends Model
{
    /**
     * @var string
     */
    public $snatEntryId;

    /**
     * @var string
     */
    public $snatEntryName;

    /**
     * @var string
     */
    public $snatIp;

    /**
     * @var string
     */
    public $snatTableId;

    /**
     * @var string
     */
    public $sourceCIDR;

    /**
     * @var string
     */
    public $sourceVSwitchId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'snatEntryId'     => 'SnatEntryId',
        'snatEntryName'   => 'SnatEntryName',
        'snatIp'          => 'SnatIp',
        'snatTableId'     => 'SnatTableId',
        'sourceCIDR'      => 'SourceCIDR',
        'sourceVSwitchId' => 'SourceVSwitchId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snatEntryId) {
            $res['SnatEntryId'] = $this->snatEntryId;
        }
        if (null !== $this->snatEntryName) {
            $res['SnatEntryName'] = $this->snatEntryName;
        }
        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
        }
        if (null !== $this->snatTableId) {
            $res['SnatTableId'] = $this->snatTableId;
        }
        if (null !== $this->sourceCIDR) {
            $res['SourceCIDR'] = $this->sourceCIDR;
        }
        if (null !== $this->sourceVSwitchId) {
            $res['SourceVSwitchId'] = $this->sourceVSwitchId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snatTableEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnatEntryId'])) {
            $model->snatEntryId = $map['SnatEntryId'];
        }
        if (isset($map['SnatEntryName'])) {
            $model->snatEntryName = $map['SnatEntryName'];
        }
        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }
        if (isset($map['SnatTableId'])) {
            $model->snatTableId = $map['SnatTableId'];
        }
        if (isset($map['SourceCIDR'])) {
            $model->sourceCIDR = $map['SourceCIDR'];
        }
        if (isset($map['SourceVSwitchId'])) {
            $model->sourceVSwitchId = $map['SourceVSwitchId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
