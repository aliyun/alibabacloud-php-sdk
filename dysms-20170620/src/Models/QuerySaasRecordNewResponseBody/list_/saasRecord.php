<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySaasRecordNewResponseBody\list_;

use AlibabaCloud\Dara\Model;

class saasRecord extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $detailPkId;

    /**
     * @var string
     */
    public $indexCol;

    /**
     * @var string
     */
    public $lastDealDate;

    /**
     * @var string
     */
    public $recordBizExpireDate;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $resultDesc;

    /**
     * @var string
     */
    public $saasContent;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'bizType' => 'BizType',
        'detailPkId' => 'DetailPkId',
        'indexCol' => 'IndexCol',
        'lastDealDate' => 'LastDealDate',
        'recordBizExpireDate' => 'RecordBizExpireDate',
        'result' => 'Result',
        'resultDesc' => 'ResultDesc',
        'saasContent' => 'SaasContent',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->detailPkId) {
            $res['DetailPkId'] = $this->detailPkId;
        }

        if (null !== $this->indexCol) {
            $res['IndexCol'] = $this->indexCol;
        }

        if (null !== $this->lastDealDate) {
            $res['LastDealDate'] = $this->lastDealDate;
        }

        if (null !== $this->recordBizExpireDate) {
            $res['RecordBizExpireDate'] = $this->recordBizExpireDate;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->resultDesc) {
            $res['ResultDesc'] = $this->resultDesc;
        }

        if (null !== $this->saasContent) {
            $res['SaasContent'] = $this->saasContent;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['DetailPkId'])) {
            $model->detailPkId = $map['DetailPkId'];
        }

        if (isset($map['IndexCol'])) {
            $model->indexCol = $map['IndexCol'];
        }

        if (isset($map['LastDealDate'])) {
            $model->lastDealDate = $map['LastDealDate'];
        }

        if (isset($map['RecordBizExpireDate'])) {
            $model->recordBizExpireDate = $map['RecordBizExpireDate'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['ResultDesc'])) {
            $model->resultDesc = $map['ResultDesc'];
        }

        if (isset($map['SaasContent'])) {
            $model->saasContent = $map['SaasContent'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
