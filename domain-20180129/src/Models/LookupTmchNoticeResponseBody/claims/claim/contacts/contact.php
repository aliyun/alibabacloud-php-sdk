<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\contacts;

use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\contacts\contact\addr;
use AlibabaCloud\Tea\Model;

class contact extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $voice;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $fax;

    /**
     * @var addr
     */
    public $addr;

    /**
     * @var string
     */
    public $org;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'type'  => 'Type',
        'voice' => 'Voice',
        'email' => 'Email',
        'fax'   => 'Fax',
        'addr'  => 'Addr',
        'org'   => 'Org',
        'name'  => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->fax) {
            $res['Fax'] = $this->fax;
        }
        if (null !== $this->addr) {
            $res['Addr'] = null !== $this->addr ? $this->addr->toMap() : null;
        }
        if (null !== $this->org) {
            $res['Org'] = $this->org;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Fax'])) {
            $model->fax = $map['Fax'];
        }
        if (isset($map['Addr'])) {
            $model->addr = addr::fromMap($map['Addr']);
        }
        if (isset($map['Org'])) {
            $model->org = $map['Org'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
