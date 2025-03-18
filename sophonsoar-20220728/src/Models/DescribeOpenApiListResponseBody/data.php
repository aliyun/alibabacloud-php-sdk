<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeOpenApiListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example [{"apis":[{"summary":"get account information","deprecated":false,"name":"DescAccountSummary","title":"get account information"}],"childrens":[],"title":"account"}]
     *
     * @var mixed
     */
    public $directories;

    /**
     * @example 2018-12-03
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'code' => 'Code',
        'directories' => 'Directories',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->directories) {
            $res['Directories'] = $this->directories;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Directories'])) {
            $model->directories = $map['Directories'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
