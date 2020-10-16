<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetPersonDetailRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $personID;

    /**
     * @var string
     */
    public $algorithmType;
    protected $_name = [
        'corpId'        => 'CorpId',
        'personID'      => 'PersonID',
        'algorithmType' => 'AlgorithmType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->personID) {
            $res['PersonID'] = $this->personID;
        }
        if (null !== $this->algorithmType) {
            $res['AlgorithmType'] = $this->algorithmType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPersonDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['PersonID'])) {
            $model->personID = $map['PersonID'];
        }
        if (isset($map['AlgorithmType'])) {
            $model->algorithmType = $map['AlgorithmType'];
        }

        return $model;
    }
}
