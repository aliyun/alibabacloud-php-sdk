<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class MergeContact extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var bool
     */
    public $emailVerify;

    /**
     * @var mixed[]
     */
    public $extend;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $phoneCode;

    /**
     * @var bool
     */
    public $phoneVerify;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'email' => 'email',
        'emailVerify' => 'emailVerify',
        'extend' => 'extend',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'identifier' => 'identifier',
        'lang' => 'lang',
        'name' => 'name',
        'phone' => 'phone',
        'phoneCode' => 'phoneCode',
        'phoneVerify' => 'phoneVerify',
        'source' => 'source',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->emailVerify) {
            $res['emailVerify'] = $this->emailVerify;
        }
        if (null !== $this->extend) {
            $res['extend'] = $this->extend;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->phoneCode) {
            $res['phoneCode'] = $this->phoneCode;
        }
        if (null !== $this->phoneVerify) {
            $res['phoneVerify'] = $this->phoneVerify;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MergeContact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['emailVerify'])) {
            $model->emailVerify = $map['emailVerify'];
        }
        if (isset($map['extend'])) {
            $model->extend = $map['extend'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['phoneCode'])) {
            $model->phoneCode = $map['phoneCode'];
        }
        if (isset($map['phoneVerify'])) {
            $model->phoneVerify = $map['phoneVerify'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
