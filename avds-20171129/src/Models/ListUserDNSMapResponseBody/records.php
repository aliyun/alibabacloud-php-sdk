<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\ListUserDNSMapResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $subdomain;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $record;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'index'     => 'Index',
        'type'      => 'Type',
        'domain'    => 'Domain',
        'subdomain' => 'Subdomain',
        'updatedAt' => 'UpdatedAt',
        'record'    => 'Record',
        'id'        => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->subdomain) {
            $res['Subdomain'] = $this->subdomain;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->record) {
            $res['Record'] = $this->record;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Subdomain'])) {
            $model->subdomain = $map['Subdomain'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Record'])) {
            $model->record = $map['Record'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
