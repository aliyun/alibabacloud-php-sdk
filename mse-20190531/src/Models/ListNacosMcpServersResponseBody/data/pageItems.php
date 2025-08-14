<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosMcpServersResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosMcpServersResponseBody\data\pageItems\versionDetail;

class pageItems extends Model
{
    /**
     * @var string[]
     */
    public $capabilities;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $frontProtocol;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $version;

    /**
     * @var versionDetail
     */
    public $versionDetail;
    protected $_name = [
        'capabilities' => 'Capabilities',
        'description' => 'Description',
        'frontProtocol' => 'FrontProtocol',
        'id' => 'Id',
        'name' => 'Name',
        'protocol' => 'Protocol',
        'version' => 'Version',
        'versionDetail' => 'VersionDetail',
    ];

    public function validate()
    {
        if (\is_array($this->capabilities)) {
            Model::validateArray($this->capabilities);
        }
        if (null !== $this->versionDetail) {
            $this->versionDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capabilities) {
            if (\is_array($this->capabilities)) {
                $res['Capabilities'] = [];
                $n1 = 0;
                foreach ($this->capabilities as $item1) {
                    $res['Capabilities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->frontProtocol) {
            $res['FrontProtocol'] = $this->frontProtocol;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->versionDetail) {
            $res['VersionDetail'] = null !== $this->versionDetail ? $this->versionDetail->toArray($noStream) : $this->versionDetail;
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
        if (isset($map['Capabilities'])) {
            if (!empty($map['Capabilities'])) {
                $model->capabilities = [];
                $n1 = 0;
                foreach ($map['Capabilities'] as $item1) {
                    $model->capabilities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FrontProtocol'])) {
            $model->frontProtocol = $map['FrontProtocol'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VersionDetail'])) {
            $model->versionDetail = versionDetail::fromMap($map['VersionDetail']);
        }

        return $model;
    }
}
