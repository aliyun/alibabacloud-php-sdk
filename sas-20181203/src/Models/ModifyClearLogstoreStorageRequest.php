<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyClearLogstoreStorageRequest extends Model
{
    /**
     * @description The ID of the request source. Set the value to **sas**.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
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
     * @description The name of the Logstore that stores logs.
     *
     * @example sas_sls_storage
     *
     * @var string
     */
    public $userLogStore;

    /**
     * @description The name of the project.
     *
     * @example sas-log-1234(uid)-cn-hangzhou
     *
     * @var string
     */
    public $userProject;
    protected $_name = [
        'from'         => 'From',
        'lang'         => 'Lang',
        'userLogStore' => 'UserLogStore',
        'userProject'  => 'UserProject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userLogStore) {
            $res['UserLogStore'] = $this->userLogStore;
        }
        if (null !== $this->userProject) {
            $res['UserProject'] = $this->userProject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClearLogstoreStorageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserLogStore'])) {
            $model->userLogStore = $map['UserLogStore'];
        }
        if (isset($map['UserProject'])) {
            $model->userProject = $map['UserProject'];
        }

        return $model;
    }
}
