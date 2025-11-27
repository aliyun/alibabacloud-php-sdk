<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePostgresExtensionsResponseBody\installedExtensions;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePostgresExtensionsResponseBody\uninstalledExtensions;

class DescribePostgresExtensionsResponseBody extends Model
{
    /**
     * @var installedExtensions[]
     */
    public $installedExtensions;

    /**
     * @var mixed[]
     */
    public $overview;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var uninstalledExtensions[]
     */
    public $uninstalledExtensions;
    protected $_name = [
        'installedExtensions' => 'InstalledExtensions',
        'overview' => 'Overview',
        'requestId' => 'RequestId',
        'uninstalledExtensions' => 'UninstalledExtensions',
    ];

    public function validate()
    {
        if (\is_array($this->installedExtensions)) {
            Model::validateArray($this->installedExtensions);
        }
        if (\is_array($this->overview)) {
            Model::validateArray($this->overview);
        }
        if (\is_array($this->uninstalledExtensions)) {
            Model::validateArray($this->uninstalledExtensions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->installedExtensions) {
            if (\is_array($this->installedExtensions)) {
                $res['InstalledExtensions'] = [];
                $n1 = 0;
                foreach ($this->installedExtensions as $item1) {
                    $res['InstalledExtensions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->overview) {
            if (\is_array($this->overview)) {
                $res['Overview'] = [];
                foreach ($this->overview as $key1 => $value1) {
                    $res['Overview'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->uninstalledExtensions) {
            if (\is_array($this->uninstalledExtensions)) {
                $res['UninstalledExtensions'] = [];
                $n1 = 0;
                foreach ($this->uninstalledExtensions as $item1) {
                    $res['UninstalledExtensions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstalledExtensions'])) {
            if (!empty($map['InstalledExtensions'])) {
                $model->installedExtensions = [];
                $n1 = 0;
                foreach ($map['InstalledExtensions'] as $item1) {
                    $model->installedExtensions[$n1] = installedExtensions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Overview'])) {
            if (!empty($map['Overview'])) {
                $model->overview = [];
                foreach ($map['Overview'] as $key1 => $value1) {
                    $model->overview[$key1] = $value1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UninstalledExtensions'])) {
            if (!empty($map['UninstalledExtensions'])) {
                $model->uninstalledExtensions = [];
                $n1 = 0;
                foreach ($map['UninstalledExtensions'] as $item1) {
                    $model->uninstalledExtensions[$n1] = uninstalledExtensions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
