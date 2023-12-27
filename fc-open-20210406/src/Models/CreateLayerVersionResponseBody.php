<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CreateLayerVersionResponseBody extends Model
{
    /**
     * @description The access mode of the layer. Digit 0 specifies that the layer is private and digit 1 specifies that the layer is public. By default, public layers are public. Custom layers can be set to private or public.
     *
     * @example 0
     *
     * @var int
     */
    public $acl;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the layer.
     *
     * @example xxxxxxxx#Layer-name#1
     *
     * @var string
     */
    public $arn;

    /**
     * @description The information about the layer code package.
     *
     * @var OutputCodeLocation
     */
    public $code;

    /**
     * @description The CRC-64 value of the layer code package. The value is calculated based on the **ECMA-182 **standard.
     *
     * @example 2825179536350****
     *
     * @var string
     */
    public $codeChecksum;

    /**
     * @description The size of the layer code package. Unit: bytes.
     *
     * @example 421
     *
     * @var int
     */
    public $codesize;

    /**
     * @description The runtimes that are supported by the layer.
     *
     * @var string[]
     */
    public $compatibleRuntime;

    /**
     * @description The time when the layer version was created. The time is in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * @example 2022-01-01T11:08:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the layer version.
     *
     * @example the first layer
     *
     * @var string
     */
    public $description;

    /**
     * @description The layer name.
     *
     * @example MyLayer
     *
     * @var string
     */
    public $layerName;

    /**
     * @description The layer version.
     *
     * @example 1
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'acl'               => 'acl',
        'arn'               => 'arn',
        'code'              => 'code',
        'codeChecksum'      => 'codeChecksum',
        'codesize'          => 'codesize',
        'compatibleRuntime' => 'compatibleRuntime',
        'createTime'        => 'createTime',
        'description'       => 'description',
        'layerName'         => 'layerName',
        'version'           => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acl) {
            $res['acl'] = $this->acl;
        }
        if (null !== $this->arn) {
            $res['arn'] = $this->arn;
        }
        if (null !== $this->code) {
            $res['code'] = null !== $this->code ? $this->code->toMap() : null;
        }
        if (null !== $this->codeChecksum) {
            $res['codeChecksum'] = $this->codeChecksum;
        }
        if (null !== $this->codesize) {
            $res['codesize'] = $this->codesize;
        }
        if (null !== $this->compatibleRuntime) {
            $res['compatibleRuntime'] = $this->compatibleRuntime;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->layerName) {
            $res['layerName'] = $this->layerName;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLayerVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['acl'])) {
            $model->acl = $map['acl'];
        }
        if (isset($map['arn'])) {
            $model->arn = $map['arn'];
        }
        if (isset($map['code'])) {
            $model->code = OutputCodeLocation::fromMap($map['code']);
        }
        if (isset($map['codeChecksum'])) {
            $model->codeChecksum = $map['codeChecksum'];
        }
        if (isset($map['codesize'])) {
            $model->codesize = $map['codesize'];
        }
        if (isset($map['compatibleRuntime'])) {
            if (!empty($map['compatibleRuntime'])) {
                $model->compatibleRuntime = $map['compatibleRuntime'];
            }
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['layerName'])) {
            $model->layerName = $map['layerName'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
