<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpgradeHoneypotNodeRequest extends Model
{
    /**
     * @description Specifies whether to allow the honeypot to access the Internet. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $allowHoneypotAccessInternet;

    /**
     * @description The language of the content within the request and response.
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the management node that you want to upgrade.
     *
     * >  You can call the [ListHoneypotNode](~~ListHoneypotNode~~) operation to obtain the ID.
     * @example a882e590-b87b-45a6-87b9-d0a3e5a0****
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'allowHoneypotAccessInternet' => 'AllowHoneypotAccessInternet',
        'lang'                        => 'Lang',
        'nodeId'                      => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowHoneypotAccessInternet) {
            $res['AllowHoneypotAccessInternet'] = $this->allowHoneypotAccessInternet;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeHoneypotNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowHoneypotAccessInternet'])) {
            $model->allowHoneypotAccessInternet = $map['AllowHoneypotAccessInternet'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
