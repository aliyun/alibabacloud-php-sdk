<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryContactsListNewResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $openPkgWarning;

    /**
     * @var int
     */
    public $openPreventBrushWarning;

    /**
     * @var int
     */
    public $openSendWarning;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var int
     */
    public $receiveSignTemplateAuditResult;
    protected $_name = [
        'email' => 'Email',
        'id' => 'Id',
        'name' => 'Name',
        'openPkgWarning' => 'OpenPkgWarning',
        'openPreventBrushWarning' => 'OpenPreventBrushWarning',
        'openSendWarning' => 'OpenSendWarning',
        'phone' => 'Phone',
        'receiveSignTemplateAuditResult' => 'ReceiveSignTemplateAuditResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->openPkgWarning) {
            $res['OpenPkgWarning'] = $this->openPkgWarning;
        }

        if (null !== $this->openPreventBrushWarning) {
            $res['OpenPreventBrushWarning'] = $this->openPreventBrushWarning;
        }

        if (null !== $this->openSendWarning) {
            $res['OpenSendWarning'] = $this->openSendWarning;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->receiveSignTemplateAuditResult) {
            $res['ReceiveSignTemplateAuditResult'] = $this->receiveSignTemplateAuditResult;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OpenPkgWarning'])) {
            $model->openPkgWarning = $map['OpenPkgWarning'];
        }

        if (isset($map['OpenPreventBrushWarning'])) {
            $model->openPreventBrushWarning = $map['OpenPreventBrushWarning'];
        }

        if (isset($map['OpenSendWarning'])) {
            $model->openSendWarning = $map['OpenSendWarning'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['ReceiveSignTemplateAuditResult'])) {
            $model->receiveSignTemplateAuditResult = $map['ReceiveSignTemplateAuditResult'];
        }

        return $model;
    }
}
