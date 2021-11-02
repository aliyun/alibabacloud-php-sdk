<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class FixCheckWarningsRequest extends Model
{
    /**
     * @var string
     */
    public $checkParams;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $riskId;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $uuids;
    protected $_name = [
        'checkParams' => 'CheckParams',
        'lang'        => 'Lang',
        'riskId'      => 'RiskId',
        'sourceIp'    => 'SourceIp',
        'uuids'       => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkParams) {
            $res['CheckParams'] = $this->checkParams;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FixCheckWarningsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckParams'])) {
            $model->checkParams = $map['CheckParams'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
