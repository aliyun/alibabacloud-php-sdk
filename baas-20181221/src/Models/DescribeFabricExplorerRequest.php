<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeFabricExplorerRequest extends Model
{
    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $exMethod;

    /**
     * @var string
     */
    public $exUrl;

    /**
     * @var string
     */
    public $exBody;
    protected $_name = [
        'organizationId' => 'OrganizationId',
        'exMethod'       => 'ExMethod',
        'exUrl'          => 'ExUrl',
        'exBody'         => 'ExBody',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->exMethod) {
            $res['ExMethod'] = $this->exMethod;
        }
        if (null !== $this->exUrl) {
            $res['ExUrl'] = $this->exUrl;
        }
        if (null !== $this->exBody) {
            $res['ExBody'] = $this->exBody;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFabricExplorerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['ExMethod'])) {
            $model->exMethod = $map['ExMethod'];
        }
        if (isset($map['ExUrl'])) {
            $model->exUrl = $map['ExUrl'];
        }
        if (isset($map['ExBody'])) {
            $model->exBody = $map['ExBody'];
        }

        return $model;
    }
}
