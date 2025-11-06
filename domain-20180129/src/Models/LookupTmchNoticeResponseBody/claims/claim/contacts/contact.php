<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\contacts;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\contacts\contact\addr;

class contact extends Model
{
    /**
     * @var addr
     */
    public $addr;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $fax;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $org;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $voice;
    protected $_name = [
        'addr' => 'Addr',
        'email' => 'Email',
        'fax' => 'Fax',
        'name' => 'Name',
        'org' => 'Org',
        'type' => 'Type',
        'voice' => 'Voice',
    ];

    public function validate()
    {
        if (null !== $this->addr) {
            $this->addr->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = null !== $this->addr ? $this->addr->toArray($noStream) : $this->addr;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->fax) {
            $res['Fax'] = $this->fax;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->org) {
            $res['Org'] = $this->org;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
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
        if (isset($map['Addr'])) {
            $model->addr = addr::fromMap($map['Addr']);
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Fax'])) {
            $model->fax = $map['Fax'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Org'])) {
            $model->org = $map['Org'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }

        return $model;
    }
}
