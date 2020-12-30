<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSnatTableEntriesResponseBody\snatTableEntries;

use AlibabaCloud\Tea\Model;

class snatTableEntry extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $snatEntryName;

    /**
     * @var string
     */
    public $sourceVSwitchId;

    /**
     * @var string
     */
    public $sourceCIDR;

    /**
     * @var string
     */
    public $snatEntryId;

    /**
     * @var string
     */
    public $snatTableId;

    /**
     * @var string
     */
    public $snatIp;
    protected $_name = [
        'status'          => 'Status',
        'snatEntryName'   => 'SnatEntryName',
        'sourceVSwitchId' => 'SourceVSwitchId',
        'sourceCIDR'      => 'SourceCIDR',
        'snatEntryId'     => 'SnatEntryId',
        'snatTableId'     => 'SnatTableId',
        'snatIp'          => 'SnatIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->snatEntryName) {
            $res['SnatEntryName'] = $this->snatEntryName;
        }
        if (null !== $this->sourceVSwitchId) {
            $res['SourceVSwitchId'] = $this->sourceVSwitchId;
        }
        if (null !== $this->sourceCIDR) {
            $res['SourceCIDR'] = $this->sourceCIDR;
        }
        if (null !== $this->snatEntryId) {
            $res['SnatEntryId'] = $this->snatEntryId;
        }
        if (null !== $this->snatTableId) {
            $res['SnatTableId'] = $this->snatTableId;
        }
        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SnatEntryName'])) {
            $model->snatEntryName = $map['SnatEntryName'];
        }
        if (isset($map['SourceVSwitchId'])) {
            $model->sourceVSwitchId = $map['SourceVSwitchId'];
        }
        if (isset($map['SourceCIDR'])) {
            $model->sourceCIDR = $map['SourceCIDR'];
        }
        if (isset($map['SnatEntryId'])) {
            $model->snatEntryId = $map['SnatEntryId'];
        }
        if (isset($map['SnatTableId'])) {
            $model->snatTableId = $map['SnatTableId'];
        }
        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }

        return $model;
    }
}
