<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\UpdateOriginPoolRequest;

use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateOriginPoolRequest\origins\authConf;
use AlibabaCloud\Tea\Model;

class origins extends Model
{
    /**
     * @description The address of the origin, e.g., www.example.com.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $address;

    /**
     * @description Authentication information. When the origin is OSS or S3 and requires authentication, you need to pass the related configuration information for authentication.
     *
     * @var authConf
     */
    public $authConf;

    /**
     * @description Whether the origin is enabled:
     *
     * - true: Enabled;
     * - false: Disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The request header to be included when fetching from the origin, supporting only Host.
     *
     * @example {
     * "Host": [
     * "example.com"
     * ]
     * }
     *
     * @var mixed
     */
    public $header;

    /**
     * @description The name of the origin, which must be unique under one origin pool.
     *
     * @example origin1
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the origin:
     *
     * - ip_domain: IP or domain type origin;
     * - OSS: OSS address origin;
     * - S3: AWS S3 origin.
     *
     * @example OSS
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight, an integer between 0 and 100.
     *
     * @example 50
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'address' => 'Address',
        'authConf' => 'AuthConf',
        'enabled' => 'Enabled',
        'header' => 'Header',
        'name' => 'Name',
        'type' => 'Type',
        'weight' => 'Weight',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->authConf) {
            $res['AuthConf'] = null !== $this->authConf ? $this->authConf->toMap() : null;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->header) {
            $res['Header'] = $this->header;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return origins
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AuthConf'])) {
            $model->authConf = authConf::fromMap($map['AuthConf']);
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Header'])) {
            $model->header = $map['Header'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
