<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListGovernObjectsResponseBody\pageResult\data;

use AlibabaCloud\Dara\Model;

class problem extends Model
{
    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $parentObjectId;

    /**
     * @var string
     */
    public $problemContactMail;

    /**
     * @var string
     */
    public $problemContactOther;

    /**
     * @var string
     */
    public $problemContactPhone;

    /**
     * @var string
     */
    public $problemDesc;

    /**
     * @var string
     */
    public $problemSubmitType;

    /**
     * @var string
     */
    public $problemSubmitter;

    /**
     * @var string
     */
    public $problemSubmitterUserName;

    /**
     * @var string[]
     */
    public $problemTypes;
    protected $_name = [
        'objectId' => 'ObjectId',
        'parentObjectId' => 'ParentObjectId',
        'problemContactMail' => 'ProblemContactMail',
        'problemContactOther' => 'ProblemContactOther',
        'problemContactPhone' => 'ProblemContactPhone',
        'problemDesc' => 'ProblemDesc',
        'problemSubmitType' => 'ProblemSubmitType',
        'problemSubmitter' => 'ProblemSubmitter',
        'problemSubmitterUserName' => 'ProblemSubmitterUserName',
        'problemTypes' => 'ProblemTypes',
    ];

    public function validate()
    {
        if (\is_array($this->problemTypes)) {
            Model::validateArray($this->problemTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        if (null !== $this->parentObjectId) {
            $res['ParentObjectId'] = $this->parentObjectId;
        }

        if (null !== $this->problemContactMail) {
            $res['ProblemContactMail'] = $this->problemContactMail;
        }

        if (null !== $this->problemContactOther) {
            $res['ProblemContactOther'] = $this->problemContactOther;
        }

        if (null !== $this->problemContactPhone) {
            $res['ProblemContactPhone'] = $this->problemContactPhone;
        }

        if (null !== $this->problemDesc) {
            $res['ProblemDesc'] = $this->problemDesc;
        }

        if (null !== $this->problemSubmitType) {
            $res['ProblemSubmitType'] = $this->problemSubmitType;
        }

        if (null !== $this->problemSubmitter) {
            $res['ProblemSubmitter'] = $this->problemSubmitter;
        }

        if (null !== $this->problemSubmitterUserName) {
            $res['ProblemSubmitterUserName'] = $this->problemSubmitterUserName;
        }

        if (null !== $this->problemTypes) {
            if (\is_array($this->problemTypes)) {
                $res['ProblemTypes'] = [];
                $n1 = 0;
                foreach ($this->problemTypes as $item1) {
                    $res['ProblemTypes'][$n1] = $item1;
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
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        if (isset($map['ParentObjectId'])) {
            $model->parentObjectId = $map['ParentObjectId'];
        }

        if (isset($map['ProblemContactMail'])) {
            $model->problemContactMail = $map['ProblemContactMail'];
        }

        if (isset($map['ProblemContactOther'])) {
            $model->problemContactOther = $map['ProblemContactOther'];
        }

        if (isset($map['ProblemContactPhone'])) {
            $model->problemContactPhone = $map['ProblemContactPhone'];
        }

        if (isset($map['ProblemDesc'])) {
            $model->problemDesc = $map['ProblemDesc'];
        }

        if (isset($map['ProblemSubmitType'])) {
            $model->problemSubmitType = $map['ProblemSubmitType'];
        }

        if (isset($map['ProblemSubmitter'])) {
            $model->problemSubmitter = $map['ProblemSubmitter'];
        }

        if (isset($map['ProblemSubmitterUserName'])) {
            $model->problemSubmitterUserName = $map['ProblemSubmitterUserName'];
        }

        if (isset($map['ProblemTypes'])) {
            if (!empty($map['ProblemTypes'])) {
                $model->problemTypes = [];
                $n1 = 0;
                foreach ($map['ProblemTypes'] as $item1) {
                    $model->problemTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
