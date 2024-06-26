<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DescribeExplorerRequest extends Model
{
    /**
     * @var string
     */
    public $exBody;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $exMethod;

    /**
     * @var string
     */
    public $exUrl;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'exBody'         => 'ExBody',
        'exMethod'       => 'ExMethod',
        'exUrl'          => 'ExUrl',
        'organizationId' => 'OrganizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exBody) {
            $res['ExBody'] = $this->exBody;
        }
        if (null !== $this->exMethod) {
            $res['ExMethod'] = $this->exMethod;
        }
        if (null !== $this->exUrl) {
            $res['ExUrl'] = $this->exUrl;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExplorerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExBody'])) {
            $model->exBody = $map['ExBody'];
        }
        if (isset($map['ExMethod'])) {
            $model->exMethod = $map['ExMethod'];
        }
        if (isset($map['ExUrl'])) {
            $model->exUrl = $map['ExUrl'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
