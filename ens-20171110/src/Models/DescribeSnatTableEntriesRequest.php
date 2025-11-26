<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeSnatTableEntriesRequest extends Model
{
    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

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
     * @var string[]
     */
    public $snatIps;

    /**
     * @var string
     */
    public $sourceCIDR;
    protected $_name = [
        'natGatewayId' => 'NatGatewayId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'snatEntryId' => 'SnatEntryId',
        'snatEntryName' => 'SnatEntryName',
        'snatIp' => 'SnatIp',
        'snatIps' => 'SnatIps',
        'sourceCIDR' => 'SourceCIDR',
    ];

    public function validate()
    {
        if (\is_array($this->snatIps)) {
            Model::validateArray($this->snatIps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->snatEntryId) {
            $res['SnatEntryId'] = $this->snatEntryId;
        }

        if (null !== $this->snatEntryName) {
            $res['SnatEntryName'] = $this->snatEntryName;
        }

        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
        }

        if (null !== $this->snatIps) {
            if (\is_array($this->snatIps)) {
                $res['SnatIps'] = [];
                $n1 = 0;
                foreach ($this->snatIps as $item1) {
                    $res['SnatIps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceCIDR) {
            $res['SourceCIDR'] = $this->sourceCIDR;
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
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SnatEntryId'])) {
            $model->snatEntryId = $map['SnatEntryId'];
        }

        if (isset($map['SnatEntryName'])) {
            $model->snatEntryName = $map['SnatEntryName'];
        }

        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }

        if (isset($map['SnatIps'])) {
            if (!empty($map['SnatIps'])) {
                $model->snatIps = [];
                $n1 = 0;
                foreach ($map['SnatIps'] as $item1) {
                    $model->snatIps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceCIDR'])) {
            $model->sourceCIDR = $map['SourceCIDR'];
        }

        return $model;
    }
}
