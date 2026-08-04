<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\MapFromHavanaBindIdResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bindHid;

    /**
     * @var string
     */
    public $havanaBindId;

    /**
     * @var string
     */
    public $havanaBindStation;

    /**
     * @var string
     */
    public $pk;
    protected $_name = [
        'bindHid' => 'BindHid',
        'havanaBindId' => 'HavanaBindId',
        'havanaBindStation' => 'HavanaBindStation',
        'pk' => 'Pk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindHid) {
            $res['BindHid'] = $this->bindHid;
        }

        if (null !== $this->havanaBindId) {
            $res['HavanaBindId'] = $this->havanaBindId;
        }

        if (null !== $this->havanaBindStation) {
            $res['HavanaBindStation'] = $this->havanaBindStation;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
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
        if (isset($map['BindHid'])) {
            $model->bindHid = $map['BindHid'];
        }

        if (isset($map['HavanaBindId'])) {
            $model->havanaBindId = $map['HavanaBindId'];
        }

        if (isset($map['HavanaBindStation'])) {
            $model->havanaBindStation = $map['HavanaBindStation'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        return $model;
    }
}
