<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

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
        'dataSource' => 'DataSource',
        'domainGroupId' => 'DomainGroupId',
        'domainName' => 'DomainName',
        'fileToUpload' => 'FileToUpload',
        'lang' => 'Lang',
        'replace' => 'Replace',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        if (\is_array($this->domainName)) {
            Model::validateArray($this->domainName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }

        if (null !== $this->domainGroupId) {
            $res['DomainGroupId'] = $this->domainGroupId;
        }

        if (null !== $this->domainName) {
            if (\is_array($this->domainName)) {
                $res['DomainName'] = [];
                $n1 = 0;
                foreach ($this->domainName as $item1) {
                    $res['DomainName'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->domainName = [];
                $n1 = 0;
                foreach ($map['DomainName'] as $item1) {
                    $model->domainName[$n1] = $item1;
                    ++$n1;
                }
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
