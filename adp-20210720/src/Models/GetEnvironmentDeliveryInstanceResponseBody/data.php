<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentDeliveryInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 4a66131e-23da-423a-8c9a-c77ee9373013
     *
     * @var string
     */
    public $clusterUID;

    /**
     * @example deliver-cfg-x24xj0yDB4X9
     *
     * @var string
     */
    public $deliverableConfigUID;

    /**
     * @example deliver-glXKBVYg8qBL
     *
     * @var string
     */
    public $deliverableUID;

    /**
     * @example 150ed1ae-eacd-4b9c-80d8-512c569b662a
     *
     * @var string
     */
    public $envUID;

    /**
     * @example f1a5956b-662f-4621-a1ae-45313b7b00e7
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'clusterUID'           => 'clusterUID',
        'deliverableConfigUID' => 'deliverableConfigUID',
        'deliverableUID'       => 'deliverableUID',
        'envUID'               => 'envUID',
        'uid'                  => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterUID) {
            $res['clusterUID'] = $this->clusterUID;
        }
        if (null !== $this->deliverableConfigUID) {
            $res['deliverableConfigUID'] = $this->deliverableConfigUID;
        }
        if (null !== $this->deliverableUID) {
            $res['deliverableUID'] = $this->deliverableUID;
        }
        if (null !== $this->envUID) {
            $res['envUID'] = $this->envUID;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterUID'])) {
            $model->clusterUID = $map['clusterUID'];
        }
        if (isset($map['deliverableConfigUID'])) {
            $model->deliverableConfigUID = $map['deliverableConfigUID'];
        }
        if (isset($map['deliverableUID'])) {
            $model->deliverableUID = $map['deliverableUID'];
        }
        if (isset($map['envUID'])) {
            $model->envUID = $map['envUID'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
