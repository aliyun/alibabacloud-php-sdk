<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class BindSlbRequest extends Model
{
    /**
     * @description 0099b7be-5f5b-4512-a7fc-56049ef1\\*\\*\\*\\*
     *
     * This parameter is required.
     * @example 0099b7be-5f5b-4512-a7fc-56049ef1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description [{"port":80,"targetPort":8080,"protocol":"TCP"}]
     *
     * @example [{"port":80,"targetPort":8080,"protocol":"TCP"}]
     *
     * @var string
     */
    public $internet;

    /**
     * @description lb-bp1tg0k6d9nqaw7l1\\*\\*\\*\\*
     *
     * @example lb-bp1tg0k6d9nqaw7l1****
     *
     * @var string
     */
    public $internetSlbId;

    /**
     * @description [{"port":80,"targetPort":8080,"protocol":"TCP"}]
     *
     * @example [{"port":80,"targetPort":8080,"protocol":"TCP"}]
     *
     * @var string
     */
    public $intranet;

    /**
     * @description lb-bp1tg0k6d9nqaw7l1\\*\\*\\*\\*
     *
     * @example lb-bp1tg0k6d9nqaw7l1****
     *
     * @var string
     */
    public $intranetSlbId;
    protected $_name = [
        'appId'         => 'AppId',
        'internet'      => 'Internet',
        'internetSlbId' => 'InternetSlbId',
        'intranet'      => 'Intranet',
        'intranetSlbId' => 'IntranetSlbId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->internet) {
            $res['Internet'] = $this->internet;
        }
        if (null !== $this->internetSlbId) {
            $res['InternetSlbId'] = $this->internetSlbId;
        }
        if (null !== $this->intranet) {
            $res['Intranet'] = $this->intranet;
        }
        if (null !== $this->intranetSlbId) {
            $res['IntranetSlbId'] = $this->intranetSlbId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindSlbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Internet'])) {
            $model->internet = $map['Internet'];
        }
        if (isset($map['InternetSlbId'])) {
            $model->internetSlbId = $map['InternetSlbId'];
        }
        if (isset($map['Intranet'])) {
            $model->intranet = $map['Intranet'];
        }
        if (isset($map['IntranetSlbId'])) {
            $model->intranetSlbId = $map['IntranetSlbId'];
        }

        return $model;
    }
}
