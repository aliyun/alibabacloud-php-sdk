<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\contacts;

use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\contacts\contact\addr;
use AlibabaCloud\Tea\Model;

class contact extends Model
{
    /**
     * @var addr
     */
    public $addr;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 4472335**8
     *
     * @var string
     */
    public $fax;

    /**
     * @example Tom
     *
     * @var string
     */
    public $name;

    /**
     * @example Tom
     *
     * @var string
     */
    public $org;

    /**
     * @example agent
     *
     * @var string
     */
    public $type;

    /**
     * @example 1390000****
     *
     * @var string
     */
    public $voice;
    protected $_name = [
        'addr'  => 'Addr',
        'email' => 'Email',
        'fax'   => 'Fax',
        'name'  => 'Name',
        'org'   => 'Org',
        'type'  => 'Type',
        'voice' => 'Voice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = null !== $this->addr ? $this->addr->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return contact
     */
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
