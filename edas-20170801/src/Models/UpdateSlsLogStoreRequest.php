<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateSlsLogStoreRequest extends Model
{
    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example af58edcf-f7eb-****-****-db4e425f****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The configurations of the Logstore.
     *
     *   The following parameters are included in the configurations:****
     *
     *   **type**: the collection type. Set this parameter to file to specify the file type. Set this parameter to stdout to specify the standard output type.
     *
     *   **logstore**: the name of the Logstore. Make sure that the name of the Logstore is unique in the cluster. The name must comply with the following rules:
     *
     *   The name can contain only lowercase letters, digits, hyphens (-), and underscores (\_).
     *   The name must start and end with a lowercase letter or a digit.
     *   The name must be 3 to 63 characters in length.
     *
     **
     *
     **Note**If you leave this parameter empty, the system automatically generates a name.
     *
     *   **LogDir**: If the standard output type is used, the collection path is stdout.log. If the file type is used, the collection path is the path of the collected file. Wildcards (\*) are supported. The collection path must match the following regular expression: `^/(.+)/(.*)^/$`.
     *
     * @example [{"logstore":"thisisanotherfilelog","type":"file","logDir":"/var/log/*"},{"logstore":"","type":"stdout","logDir":"stdout.log"},{"logstore":"thisisafilelog","type":"file","logDir":"/tmp/log/*"}]
     *
     * @var string
     */
    public $configs;
    protected $_name = [
        'appId'   => 'AppId',
        'configs' => 'Configs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->configs) {
            $res['Configs'] = $this->configs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSlsLogStoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Configs'])) {
            $model->configs = $map['Configs'];
        }

        return $model;
    }
}
