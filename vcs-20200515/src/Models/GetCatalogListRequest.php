<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetCatalogListRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $isvSubId;
    protected $_name = [
        'corpId'   => 'CorpId',
        'isvSubId' => 'IsvSubId',
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
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCatalogListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }

        return $model;
    }
}
