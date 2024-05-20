<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class BatchStartApplicationsRequest extends Model
{
    /**
     * @description The returned message.
     *
     *   **success** is returned when the request succeeds.
     *   An error code is returned when the request fails.
     *
     * @example ebf491f0-c1a5-45e2-b2c4-710dbe2a****
     *
     * @var string
     */
    public $appIds;

    /**
     * @description The ID of the request.
     *
     * This parameter is required.
     * @example cn-shanghai
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'appIds'      => 'AppIds',
        'namespaceId' => 'NamespaceId',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchStartApplicationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
