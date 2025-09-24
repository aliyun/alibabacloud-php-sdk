<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryUserOmsDataResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $hostId;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var mixed[][]
     */
    public $omsData;
    protected $_name = [
        'hostId' => 'HostId',
        'marker' => 'Marker',
        'omsData' => 'OmsData',
    ];

    public function validate()
    {
        if (\is_array($this->omsData)) {
            Model::validateArray($this->omsData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }

        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }

        if (null !== $this->omsData) {
            if (\is_array($this->omsData)) {
                $res['OmsData'] = [];
                $n1 = 0;
                foreach ($this->omsData as $item1) {
                    if (\is_array($item1)) {
                        $res['OmsData'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['OmsData'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }

        if (isset($map['OmsData'])) {
            if (!empty($map['OmsData'])) {
                $model->omsData = [];
                $n1 = 0;
                foreach ($map['OmsData'] as $item1) {
                    if (!empty($item1)) {
                        $model->omsData[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->omsData[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
