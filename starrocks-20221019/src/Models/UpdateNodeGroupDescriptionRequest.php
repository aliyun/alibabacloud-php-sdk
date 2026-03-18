<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class UpdateNodeGroupDescriptionRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $xAcsRamAuthContext;
    protected $_name = [
        'description' => 'Description',
        'nodeGroupId' => 'NodeGroupId',
        'xAcsRamAuthContext' => 'X-Acs-Ram-Auth-Context',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->xAcsRamAuthContext) {
            $res['X-Acs-Ram-Auth-Context'] = $this->xAcsRamAuthContext;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['X-Acs-Ram-Auth-Context'])) {
            $model->xAcsRamAuthContext = $map['X-Acs-Ram-Auth-Context'];
        }

        return $model;
    }
}
