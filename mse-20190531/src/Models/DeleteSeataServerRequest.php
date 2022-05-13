<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class DeleteSeataServerRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description 集群名称
     *
     * @var string
     */
    public $seataServerUniqueId;
    protected $_name = [
        'acceptLanguage'      => 'AcceptLanguage',
        'seataServerUniqueId' => 'SeataServerUniqueId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->seataServerUniqueId) {
            $res['SeataServerUniqueId'] = $this->seataServerUniqueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSeataServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['SeataServerUniqueId'])) {
            $model->seataServerUniqueId = $map['SeataServerUniqueId'];
        }

        return $model;
    }
}
