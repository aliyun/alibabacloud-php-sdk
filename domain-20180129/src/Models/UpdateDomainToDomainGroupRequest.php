<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainToDomainGroupRequest extends Model
{
    /**
     * @var int
     */
    public $dataSource;

    /**
     * @var int
     */
    public $domainGroupId;

    /**
     * @var string[]
     */
    public $domainName;

    /**
     * @var string
     */
    public $fileToUpload;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $replace;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'dataSource'    => 'DataSource',
        'domainGroupId' => 'DomainGroupId',
        'domainName'    => 'DomainName',
        'fileToUpload'  => 'FileToUpload',
        'lang'          => 'Lang',
        'replace'       => 'Replace',
        'userClientIp'  => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->domainGroupId) {
            $res['DomainGroupId'] = $this->domainGroupId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->fileToUpload) {
            $res['FileToUpload'] = $this->fileToUpload;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->replace) {
            $res['Replace'] = $this->replace;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDomainToDomainGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['DomainGroupId'])) {
            $model->domainGroupId = $map['DomainGroupId'];
        }
        if (isset($map['DomainName'])) {
            if (!empty($map['DomainName'])) {
                $model->domainName = $map['DomainName'];
            }
        }
        if (isset($map['FileToUpload'])) {
            $model->fileToUpload = $map['FileToUpload'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Replace'])) {
            $model->replace = $map['Replace'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
