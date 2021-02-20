<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class CreateOrganizationRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $domains;
    protected $_name = [
        'sourceIp'    => 'SourceIp',
        'name'        => 'Name',
        'description' => 'Description',
        'domains'     => 'Domains',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrganizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = $map['Domains'];
            }
        }

        return $model;
    }
}
