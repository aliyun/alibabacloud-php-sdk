<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRiskLevelsResponseBody;

use AlibabaCloud\Tea\Model;

class riskLevelList extends Model
{
    /**
     * @description The description of the sensitivity level. You can enter a custom description.
     *
     * The following list describes the sensitivity level names and the corresponding default description:
     *
     *   **NA**: which indicates that no sensitive data is detected.
     *   **S1**: which indicates the sensitive data at sensitivity level 1.
     *   **S2**: which indicates the sensitive data at sensitivity level 2.
     *   **S3**: which indicates the sensitive data at sensitivity level 3.
     *   **S4**: which indicates the sensitive data at sensitivity level 4.
     *   **S5**: which indicates the sensitive data at sensitivity level 5.
     *   **S6**: which indicates the sensitive data at sensitivity level 6.
     *   **S7**: which indicates the sensitive data at sensitivity level 7.
     *   **S8**: which indicates the sensitive data at sensitivity level 8.
     *   **S9**: which indicates the sensitive data at sensitivity level 9.
     *   **S10**: which indicates the sensitive data at sensitivity level 10.
     *
     * @example Sensitive data at sensitivity level 1
     *
     * @var string
     */
    public $description;

    /**
     * @description The unique ID of the sensitivity level. Valid values: 1 to 11. Each sensitivity level ID maps a sensitivity level. For example, the sensitivity level ID of 2 corresponds to the sensitivity level S1.
     *
     * For more information, see the description of the Name parameter.
     * @example 2
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the sensitivity level. The highest sensitivity level varies based on rule templates. The highest sensitivity level is S10. The highest sensitivity level of the **Built-in data security classification templates for Alibaba and Ant Group** is S4, and that of the **built-in classification templates for financial data** and **built-in classification templates for assets** is S5. For more information about the built-in classification templates for financial data, see Guidelines for Security Classification of Financial Data and Security Data - JRT 0197-2020. For a copied rule template, the highest sensitivity level is S10. The following list describes the sensitivity level names and the corresponding IDs:
     *
     *   **NA**: 1
     *   **S1**: 2
     *   **S2**: 3
     *   **S3**: 4
     *   **S4**: 5
     *   **S5**: 6
     *   **S6**: 7
     *   **S7**: 8
     *   **S8**: 9
     *   **S9**: 10
     *   **S10**: 11
     *
     * @example S1
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of times that each sensitivity level is referenced in the rule template. Default value: 0.
     *
     * @example 20
     *
     * @var int
     */
    public $referenceNum;
    protected $_name = [
        'description'  => 'Description',
        'id'           => 'Id',
        'name'         => 'Name',
        'referenceNum' => 'ReferenceNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->referenceNum) {
            $res['ReferenceNum'] = $this->referenceNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskLevelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ReferenceNum'])) {
            $model->referenceNum = $map['ReferenceNum'];
        }

        return $model;
    }
}
