<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePostgresExtensionsResponseBody\installedExtensions;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePostgresExtensionsResponseBody\uninstalledExtensions;
use AlibabaCloud\Tea\Model;

class DescribePostgresExtensionsResponseBody extends Model
{
    /**
     * @description The extensions that are installed on the database.
     *
     * @var installedExtensions[]
     */
    public $installedExtensions;

    /**
     * @description The overview of the extension.
     *
     * @example None
     *
     * @var mixed[]
     */
    public $overview;

    /**
     * @description The request ID.
     *
     * @example 7E4448A6-9FE6-4474-A0C1-AA7CFC772CAC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The extensions that are not installed on the database.
     *
     * @var uninstalledExtensions[]
     */
    public $uninstalledExtensions;
    protected $_name = [
        'installedExtensions'   => 'InstalledExtensions',
        'overview'              => 'Overview',
        'requestId'             => 'RequestId',
        'uninstalledExtensions' => 'UninstalledExtensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->installedExtensions) {
            $res['InstalledExtensions'] = [];
            if (null !== $this->installedExtensions && \is_array($this->installedExtensions)) {
                $n = 0;
                foreach ($this->installedExtensions as $item) {
                    $res['InstalledExtensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->overview) {
            $res['Overview'] = $this->overview;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uninstalledExtensions) {
            $res['UninstalledExtensions'] = [];
            if (null !== $this->uninstalledExtensions && \is_array($this->uninstalledExtensions)) {
                $n = 0;
                foreach ($this->uninstalledExtensions as $item) {
                    $res['UninstalledExtensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePostgresExtensionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstalledExtensions'])) {
            if (!empty($map['InstalledExtensions'])) {
                $model->installedExtensions = [];
                $n                          = 0;
                foreach ($map['InstalledExtensions'] as $item) {
                    $model->installedExtensions[$n++] = null !== $item ? installedExtensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Overview'])) {
            $model->overview = $map['Overview'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UninstalledExtensions'])) {
            if (!empty($map['UninstalledExtensions'])) {
                $model->uninstalledExtensions = [];
                $n                            = 0;
                foreach ($map['UninstalledExtensions'] as $item) {
                    $model->uninstalledExtensions[$n++] = null !== $item ? uninstalledExtensions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
