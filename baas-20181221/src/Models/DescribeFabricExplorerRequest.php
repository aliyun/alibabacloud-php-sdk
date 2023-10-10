<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeFabricExplorerRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $exBody;

    /**
     * @example GET
     *
     * @var string
     */
    public $exMethod;

    /**
     * @example /api/v1/channel
     *
     * @var string
     */
    public $exUrl;

    /**
     * @example peers-test11-tzwny25vqicq
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
     * @return DescribeFabricExplorerRequest
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
