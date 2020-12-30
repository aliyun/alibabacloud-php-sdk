<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class DeleteFlexAccFwdRuleRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $esnBizId;

    /**
     * @var string
     */
    public $identity;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'esnBizId' => 'EsnBizId',
        'identity' => 'Identity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->esnBizId) {
            $res['EsnBizId'] = $this->esnBizId;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFlexAccFwdRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['EsnBizId'])) {
            $model->esnBizId = $map['EsnBizId'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }

        return $model;
    }
}
